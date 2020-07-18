//swap two numbers
#include<stdio.h>
#include<conio.h>
void main()
{
	int a,b,c;
	clrscr();

	printf("Enter two numbers:\n");
	scanf ("%d%d",&a,&b);
	printf("Numbers: %d %d\n",a,b);

	a=a+b;
	b=a-b;
	a=a-b;

	printf("Swapped numbers(without temp var): %d %d\n",a,b);

	c=a;
	a=b;
	b=c;

	printf("Swapped numbers(with temp var): %d %d\n",a,b);

	getch();
}