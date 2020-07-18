//binomial coefficient
#include<stdio.h>
//#include<conio.h>
int bin(int,int);
main()
{
	//clrscr();
	int n,k,b;
	do
	{
		printf("Enter two numbers:\n");
		scanf ("%d%d",&n,&k);
		if(n<k||k==0)
			printf("Invalid input\nEnter proper input(n>k,k!=0)\n");
	}while(n<k||k==0);
	b=bin(n,k);
	printf("b=%d",b);
	//getch();
}
int bin (int n,int k)
{
	if(n<k||k==0)
		return 0;
	else if (n==k)
		return 1;
	else
		return(bin(n-1,k-1)+bin(n-1,k));
}
