//Bisection Method
#include<stdio.h>
#include<conio.h>
#include<math.h>
float f (float x)
{
	return x*x*x-4*x-9;
}
void main()
{
	clrscr();
	int i,it;
	float a,b,c,fa,fb,fc;

	printf("Bisection Method\n");
	printf("\nEnter value of a,b\n");
	scanf ("%f%f",&a,&b);
	printf("\nEnter no of iteration:\n");
	scanf ("%d",&it);

	fa=f(a);
	fb=f(b);

	if(fa*fb>0)
		printf("Invalid i/p");
	else
	{
		printf("\nIteration\t  a\t  b\t  c\t f(a)\t f(c)\t f(b)");
		printf("\n--------------------------------------------------------------\n");

		for(i=0;i<it;i++)
		{
			c=(a+b)/2;
			fc=f(c);
			printf("    %d\t\t%.3f\t%.3f\t%.3f\t%.3f\t%.3f\t%.3f\n",i+1,a,b,c,fa,fc,fa);
			if((fa*fc)<0)
				b=c;
			else
				a=c;
			fa=f(a);
			fb=f(b);
		}
	}
	printf("\nApproximate root = %.3f",c);
	getch();
}