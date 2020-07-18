//Recursion nth fibonic value
#include<stdio.h>
#include<conio.h>
int fib(int);
void main()
{
	clrscr();
	int n,f;
	printf("Enter value of n:\n");
	scanf ("%d",&n);
	f=fib(n);
	printf("%dth fibonic value:%d\n",n,f);
	getch();
}
int fib(int n)
{
	if(n==0)
		return (0);
	else if(n==1)
		return (1);
	else
		return(fib(n-1)+fib(n-2));
}