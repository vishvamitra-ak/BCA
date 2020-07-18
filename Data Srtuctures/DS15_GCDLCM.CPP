//Recursion gcd,lcm
#include<stdio.h>
#include<conio.h>
int gcd(int,int);
void main()
{
	clrscr();
	int a,b,g,l;
	printf("Enter value of a,b\n");
	scanf ("%d%d",&a,&b);
	g=gcd(a,b);
	l=(a*b)/g;
	printf("gcd :%d lcm:%d\n",g,l);
	getch();
}
int gcd(int a,int b)
{
	int rem;
	rem=a%b;
	if(rem==0)
		return b;
	else
	return(gcd(b,rem));
}