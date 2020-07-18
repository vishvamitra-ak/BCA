//Identity matrix
#include<stdio.h>
#include<conio.h>
void main()
{
	clrscr();
	int n,i,j,a[10][10],f=0;
	printf("Enter size:\n");
	scanf ("%d",&n);
	printf("Enter %d*%d Elements:\n",n,n);
	for(i=0;i<n;i++)
	{
		for(j=0;j<n;j++)
			scanf("%d",&a[i][j]);
	}
	printf("Matrix:\n");
	for(i=0;i<n;i++)
	{
		for(j=0;j<n;j++)
			printf("%d ",a[i][j]);
		printf("\n");
	}
	for(i=0;i<n;i++)
	{
		for(j=0;j<n;j++)
		{
			if(i==j)
			{
				if(a[i][j]==1)
					f=1;
				else
				{
					f=0;
					goto A;
				}
			}
			else
			{
				if(a[i][j]==0)
					f=1;
				else
				{
					f=0;
					goto A;
				}
			}
		}
	}
A:
	if(f==1)
		printf("Matrix is Identity Matrix\n");
	else
		printf("Matrix is not identity matrix\n");
	getch();
}


