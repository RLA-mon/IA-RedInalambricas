import serial 
import MySQLdb
import time

#establish connection to MySQL. You'll have to change this for your database.
dbConn = MySQLdb.connect("localhost","root","","arduino") or die ("could not connect to database")
#open a cursor to the database
cursor = dbConn.cursor()

device = 'COM3' #this will have to be changed to the serial port you are using
try:
  print ("Conectando...",device )
  arduino = serial.Serial(device, 9600) 
except: 
  print ("Fallo conecion con dispositivo",device)
while True:
    time.sleep(1)
    try:
        data=arduino.readline()
        print (data)
        pieces=data.split(" ")
        try:
            cursor=dbConn.cursor()
            cursor.execute("""INSERT INTO registrospro (id,numeroid,ertenece) VALUES (NULL,%s,%s)""", (pieces[0],pieces[1]))
            dbConn.commit()
            cursor.close()
        except MySQLdb.IntegrityError:
            print ("No insertaron datos")
        finally:
            cursor.close()
    except:
        print ("Procesando")
    