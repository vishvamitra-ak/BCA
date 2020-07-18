//Trapizoidal
#include<stdio.h>
#include<conio.h>
#include<math.h>
#define f(x) 1/(1+x*x)
void main()
{
	clrscr();
	int i;
	float x[10],y[10],a,b,n,h,s,z,I;
	printf("Enter the value of subject intervals:\n");
	scanf ("%f",&n);
	printf("Enter the value of lower and upper units\n");
	scanf ("%f%f",&a,&b);
	printf("\n");
	h=(b-a)/n;
	printf("h=%.4f\n",h);
	x[0]=a;
	y[0]=f((a));
	printf("then value of x and y are\n");
	for(i=1;i<=n;i++)
	{
		x[i]=x[i-1]+h;
		y[i]=f((x[i]));
	}
	for(i=0;i<=n;i++)
	{
		printf("x=%.4f\t",x[i]);
		printf("y=%.4f\n",y[i]);
	}
	s=y[0]+y[n];
	z=0;
	for(i=1;i<=n-1;i++)
	{
		z=z+y[i];
	}
	I=(h/2)*(s+(2*z));
	printf("\nThe value of given integral is %f\n",I);
	getch();
}