//Simpsons
#include<stdio.h>
#include<conio.h>
#include<math.h>
#define f(x) (1/(1+x*x))
void main()
{
	clrscr();
	int i,ch;
	float x[10],y[10],a,n,b,h,s,z1,z2,l1,l2,v1,v2;
	printf("Enter no of sub intervals:\n");
	scanf ("%f",&n);
	printf("Enter the value of lower and upper:\n");
	scanf ("%f%f",&a,&b);
	h=(b-a)/n;
	printf("\nh=%.2f\n",h);
	x[0]=a;
	y[0]=f((a));
	for(i=1;i<=n;i++)
	{
		x[i]=x[i-1]+h;
		y[i]=f((x[i]));
	}
	printf("The value of x and y are\n");
	for(i=0;i<=n;i++)
	{
		printf("x=%.2f\t",x[i]);
		printf("y=%.2f\n",y[i]);
	}
	printf("1.Simpson 1/3rd rule\n");
	printf("2.Simpson 3/8th rule\n");
	printf("Enter the choice\n");
	scanf ("%d",&ch);
	switch(ch)
	{
		case 1: s=y[0]+y[n];
				z1=0;
				z2=0;
				for(i=1;i<=n-1;i++)
				{
					if((i%2)==0)
						z1=z1+y[i];
					else
						z2=z2+y[i];
				}
				printf("s=%.2f\nz1=%.2f\nz2=%.2f\n",s,z1,z2);
				l1=(h/3)*(s+(2*z1)+(4*z2));
				printf("\nthe value of integral by simpsons 1/3rd method%f\n",l1);
				break;
		case 2: s=y[0]+y[n];
				v1=0;
				v2=0;
				for(i=1;i<=n-1;i++)
				{
					if(i%3==0)
						v1=v1+y[i];
					else
						v2=v2+y[i];
				}
				printf("s=%.2f\nv1=%.2f\nv2=%.2f\n",s,v1,v2);
				l2=((3*h)/8)*(s+(2*v1)+(3*v2));
				printf("\n");
				printf("the value of integral by simpsons 3/8th method %f\n",l2);
				break;
		default:printf("Invalid Choice\n");
	}
	getch();
}

