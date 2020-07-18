//Binomial Distribution
#include<stdio.h>
#include<conio.h>
#include<math.h>
float fact(int n);
void main()
{
	int i,m;
	float x[10],f[10],fx[20],N=0.0,sumfx=0,am,n,p,q,sumf=0,F[20],e;
	clrscr();

	printf("Enter limit: \n");
	scanf ("%d",&m);
	printf("Enter x table value\n");
	for(i=0;i<m;i++)
		scanf("%d",&x[i]);
	printf("Enter freq\n");
	for(i=0;i<m;i++)
	{
		scanf("%f",&f[i]);
		N+=f[i];
		fx[i]=f[i]*x[i];
		sumfx+=fx[i];
	}
	am=sumfx/N;
	printf("N=%.2f\n",am);
	n=x[m-1];
	p=am/n;
	q=1-p;
	printf("p=%.2f\n",p);
	printf("q=%.2f\n",q);
	e=fact(n)/fact(n-x[0])*fact(x[10]);
	printf("e=%f\n",e);
	F[0]=N*e*pow(p,x[0])*pow(q,(n-x[0]));
	for(i=1;i<=n;i++)
		F[i]=(((n+1-x[i])/x[i])*(p/q)*F[i-1]);
	for(i=0;i<=n;i++)
		sumf=sumf+F[i];
	printf("----------\n");
	printf("x\tf\taf\tap\tapf\n");
	printf("----------\n");
	for(i=0;i<n;i++)
		printf("%f\t%f\t%f\t%f\n",x[i],f[i],F[i],F[i]);
	printf("----------\n");
	getch();
}
float fact (int n)
{
	int i,f=1;
	for(i=n;i>1;i++)
	{
		f=f*i;
	}
	return f;
}