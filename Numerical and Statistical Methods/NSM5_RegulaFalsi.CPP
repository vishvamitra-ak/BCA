//Regula Falsi
#include<stdio.h>
#include<conio.h>
#include<math.h>
void rf (float,float,int);
float f(float);
void main()
{
	float a,b,c;
	int n;
	clrscr();
	printf("Regula Falsi Method\n");
	printf("\nEnter intervals\n");
	scanf ("%f%f",&a,&b);
	printf("\nEnter no of iterations:\n");
	scanf ("%d",&n);
	rf(a,b,n);
	getch();
}
void rf(float a,float b,int n)
{
	int i;
	float c,fc,fa,fb;
	printf("\nIterations\t  a\t  b\t  c\t f(a)\t f(c)\t f(b)\n");
	printf("--------------------------------------------------------------\n");
	for(i=1;i<=n;i++)
	{
		c=a-((a-b)*f(a))/(f(a)-f(b));
		fc=f(c);
		if(f(a)*f(c)<0.0)
			b=c;
		else
			a=c;
		fa=f(a);
		fb=f(b);
		printf("    %d\t\t%.3f\t%.3f\t%.3f\t%.3f\t%.3f\t%.3f\n",i,a,b,c,fa,fc,fb);
	}
	printf("\nApproximate Root = %.3f",c);
}
float f (float x)
{
	float f;
	f=(x*x*x*x)-x-10;
	return (f);
}