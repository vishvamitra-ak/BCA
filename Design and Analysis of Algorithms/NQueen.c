#include<stdio.h>
#include<stdlib.h>
#include<conio.h>
#include<math.h>
void nqueens(int);
int place(int[],int);
void printsoln(int,int[]);
int main()
{
	int n;
	//clrscr();
	printf("Enter no. of Queens:");
    scanf("%d",&n);
	nqueens(n);
	//getch();
}
void nqueens(int n)
{
	int x[10],count=0,k=1;
	x[k]=0;
	while(k!=0)
	{
		x[k]=x[k]+1;
		while(x[k]<=n&&(!place(x,k)))
			x[k]=x[k]+1;
		if(x[k]<=n)
		{
			if(k==n)
			{
				count++;
				printf("\n soln=%d\n",count);
				printsoln(n,x);
			}
			else
			{
				k++;
				x[k]=0;
			}
		}
		else
		{
			k--;
		}
	}
	return;
}
int place(int x[],int k)
{
	int i;
	for(i=1;i<k;i++)
		if(x[i]==x[k]||(abs(x[i]-x[k]))==abs(i-k))
			return 0;
	return 1;
}
void printsoln(int n,int x[])
{
	int i,j;
	char c[10][10];
	for(i=1;i<=n;i++)
	{
		for(j=1;j<=n;j++)
			c[i][j]='x';
	}
	for(i=1;i<=n;i++)
		c[i][x[i]]='Q';
	for(i=1;i<=n;i++)
	{
		for(j=1;j<=n;j++)
		{
			printf("%c\t",c[i][j]);
		}
		printf("\n");
	}
}
