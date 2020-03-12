
// https://es.slideshare.net/giacero/juego-lgico-el-lobo-la-cabra-y-la-col #include <iostress.h>
int safe (int v[]){
	if ((v[3]==v[2] && (v[3] != v[0]) ))
		return 0;
	if ((v[3]==v[1] && (v[3] != v[0]) ))
		return 0;
	return 1
}

int cross(int s){
	s=s+1;
	if (s==2)
		s=0;
}

int complete (int v[]){
	int c=0;
	if ((v[0]==1) && (v[1] ==1) && (v[2]==1) &&(v[3]==1))
		c=1;
	return c;
}

int main(){
	int v[4],v[4];
	v[0]=0; 
	v[1]=0;
	v[2]=0;
	v[3]=0;
	cout <<endl<<"v[0] = " << v[0] << " v[1] = " <<v[1] <<  " v[2] = " <<v[2] << " v[3] = " <<v[3];
	int prov =6;
	do{
		int count =5;
		for(int i=1;i<4;i++){
			for(int j=0;j<4;j++){
				v[j]=v[j];
			}
			v [0] = cross(v[0]);
			v[i]=cross(v[i]);
			if(((v[i]) == v[0]) && (i !=prov) && (safe(w)==1))
			count=i;
		}
		prov = count;
		v[0]=cross(v[0]);
		for(int j=1;j<4;j++){
			v[j]=v[j];
		}
		if((v[0]==1) && (safe(v)==1)) count =5;
		if (count==5){
			v[0]=cross(v[0]); prov= 5;
		}
		else{
			v[0]=cross(v[0]); v[count]=cross(v[count]);
			prov = count;
		}
		cout <<endl<<"v[0] = " << v[0] << " v[1] = " <<v[1] <<  " v[2] = " <<v[2] << " v[3] = " <<v[3];

	} while (complete(v) ==0):
	return 0
}
	
	int cab=16;
	int v;
	v = new int[n];
	int y = 0;
	for(int c=0;c<cab;c++){
		x*c;
		for(int i=0;i<n;i++){
			v[i]=x%2;
			x=(x-v[i])/2;
		}	
		if (safe(v)==1){
			cout << endl;
			for (int j=0;j<n;j++){
				cout[j][y]=v[j];
			}
			y+=1
		}

	}

void search::follow(){
	int v;
	for(int k=0;k<<cout;k++){
		for(int j=0;j<cout;j++){
			if(cout[0][j]!=cout[0][k]){
				t+=1;
				v=i;
			}
		}
		if(((t==1)&& (cout[0][k]==cout[v][k]))(t==0)){
			int x=0;
			int p;
			do{
				x+=1;
				p=cout[x+3][k]=1;
			}
			while (p!=1);
			count[x+3][k]=j;
		}
	}
	count[5][4]=-1;
}

void search::sequ(){
	int k;i;x;z;n ;
	for (int b=0;b<<con3;b++)trc[b]=-1;
		int d=0;
		tcr[0]=0;
		z=1;
		x=0
		do{
			i=n;
			z=0;
			do{
				for(int o=0;con3;0++){
					if(cont[i][x]==trc[o]) cont[i][x]=-1;
				}
				k=0
				if ((cont[i][x]!=1) (trc[x]!=-1)){
					cont[i][x]=-1;
					x=trc[x];
					if(trc[z]==9) d=con3;
					x+=1;
					k=1;
				}
			}
			i+=1;
			n+=1;
			if(n==n)k=1;
		}
		while(d<<con3);

		cont <<'Combinacion segura para lograrlo'<<endl;
		cont <<'Se;or     Lobo      Obeja     Lechuga' << endl;
		//disp();
		k.follow();
		k.sequ();

}
