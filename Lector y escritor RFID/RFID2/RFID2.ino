#include <SPI.h>
#include <MFRC522.h>
//#include <avi/wdt.h>

//p
#include <Wire.h> 
#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x3F,16,2);  

#define RST_PIN  9    
#define SS_PIN  10   //Pin 10 para el SS (SDA) del RC522
MFRC522 mfrc522(SS_PIN, RST_PIN); ///Creamos el objeto para el RC522

void setup() {
  //wdt_disable();
  Serial.begin(9600); 
  SPI.begin();        
  mfrc522.PCD_Init(); 
  Serial.println("Control de acceso:");
   lcd.init();
   lcd.backlight();
  lcd.print("  RFID  By Mon                             ");
}

byte ActualUID[4];
byte Usuario1[4]= {0x90, 0x3E, 0xC9, 0xA3} ;
byte Usuario2[4]= {0x90, 0x3E, 0xC9, 0xA3} ; 
//wdt_enable(WDTO_S8);
void loop() {
  // Revisamos si hay nuevas tarjetas  presentes
  if ( mfrc522.PICC_IsNewCardPresent()) 
        {  
      //Seleccionamos una tarjeta
            if ( mfrc522.PICC_ReadCardSerial()) 
            {
                  lcd.print("  RFID  By Mon                             ");
                  // Enviamos serialemente su UID
                  Serial.print(F("Card UID:"));
                  for (byte i = 0; i < mfrc522.uid.size; i++) {
                          Serial.print(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " ");
                          Serial.print(mfrc522.uid.uidByte[i], HEX);   
                          ActualUID[i]=mfrc522.uid.uidByte[i];          
                  } 
                  Serial.print("     "); 
                  lcd.clear();                
                  //comparamos los UID para determinar si es uno de nuestros usuarios  
                  if(compareArray(ActualUID,Usuario1))
                    Serial.println("Acceso valido");
                    lcd.print("   Acceso Valido ")
                    lcd.clear();

                  else if(compareArray(ActualUID,Usuario2))
                    Serial.println("Acceso valido");
                    lcd.print("  Acceso Valido ")
                    lcd.clear();
                  else
                    Serial.println("Acceso denegado");
                    lcd.print("  Acceso denegado      ")
                    lcd.clear();
                  
                  // Terminamos la lectura de la tarjeta tarjeta  actual
                  mfrc522.PICC_HaltA();
          
            }
      
  }
  
}

//Función para comparar dos vectores
 boolean compareArray(byte array1[],byte array2[])
{
  if(array1[0] != array2[0])return(false);
  if(array1[1] != array2[1])return(false);
  if(array1[2] != array2[2])return(false);
  if(array1[3] != array2[3])return(false);
  return(true);
}
