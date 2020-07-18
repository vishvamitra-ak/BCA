//Poison distribution
#include<stdio.h>
#include<conio.h>
#include<math.h>
#define e 2.718
void main()
{
	int i,n;
	float x[10],f[10],fx[10],f1[10],N=0,sumfx=0,lamda,px,sf1=0;

	printf("Enter limit\n");
	scanf ("%d",&n);
	printf("Enter value of x:\n");
	for(i=0;i<n;i++)
		scanf("%f",&x[i]);
	printf("Enter value of f\n");
	for(i=0;i<n;i++)
		scanf("%f",&f[i]);
	for(i=0;i<n;i++)
	{
		N=N+f[i];
		fx[i]=f[i]*x[i];
		sumfx=sumfx+fx[i];
	}
	lamda=sumfx/N;
	1=lamda;
	px=(pow(e,1)*pow(lamda,x[0]/fact(x[0])));
	f1[0]=N+px;
	for(i=1;i<n;i++)
		f1[i]=(lamda/x[i])+f1(x[i]-1);
	for(i=0;i<n;i++)
		sf1=sf1+f1[i];
	printf("--");
	printf("x\tf\tfx\taf\tapt\n");
	printf("-----");
	for(i=0;i<n;i++)
		printf("%f\t\t%f\t%f\t%f\n",x[i],f[i],fx[i],f1[i]);
	printf("--");
	printf("N=%f\t&f\t\t%f\n",N,sumfx,sf1);
	printf("--");
	getch();
}


