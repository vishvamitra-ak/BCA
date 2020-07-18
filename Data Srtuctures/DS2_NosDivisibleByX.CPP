//Print numbers divisible by x from n to m
#include<stdio.h>
#include<conio.h>
void main()
{
	int n,m,i,x;
	clrscr();

	printf("Enter lower and upper limits:\n");
	scanf ("%d%d",&n,&m);
	printf("Enter number:\n");
	scanf ("%d",&x);

	for(i=m;i>=n;i--)
	{
		if((i%x)==0)
			printf("%d ",i);
	}
	getch();
}