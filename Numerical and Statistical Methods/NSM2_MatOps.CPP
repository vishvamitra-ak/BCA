//Addition of matrices
#include<stdio.h>
#include<conio.h>
int i,j,k,m,n;
void add (int a[10][10],int b[10][10],int m,int n);
void sub (int a[10][10],int b[10][10],int m,int n);
void mul (int a[10][10],int b[10][10],int m,int n);
void main()
{
	clrscr();
	int a[10][10],b[10][10];

	printf("Enter order of matrix: m*n\n");
	scanf ("%d%d",&m,&n);
	printf("Enter elements for matrix A:\n");
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
			scanf("%d",&a[i][j]);
	}
	printf("Enter elements for matrix B:\n");
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
			scanf("%d",&b[i][j]);
	}
	printf("Matrix A:\n");
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
			printf("%d\t",a[i][j]);
		printf("\n");
	}
	printf("Matrix B:\n");
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
			printf("%d\t",b[i][j]);
		printf("\n");
	}
	add(a,b,m,n);
	sub(a,b,m,n);
	mul(a,b,m,n);
	getch();
}
void add (int a[10][10],int b[10][10],int m,int n)
{
	int sum[10][10];
	printf("Addition:\n");
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
		{
			sum[i][j]=a[i][j]+b[i][j];
			printf("%d ",sum[i][j]);
		}
		printf("\n");
	}
}
void sub (int a[10][10],int b[10][10],int m,int n)
{
	int sum[10][10];
	printf("Substraction:\n");
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
		{
			sum[i][j]=a[i][j]-b[i][j];
			printf("%d ",sum[i][j]);
		}
		printf("\n");
	}
}
void mul (int a[10][10],int b[10][10],int m,int n)
{
	int sum[10][10];
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
		{
			sum[i][j]=0;
			for(int k=0;k<3;k++)
			{
				sum[i][j]=sum[i][j]+a[i][k]*b[k][j];
			}
		}
	}
	printf("Multiplication:\n");
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
			printf("%d\t",sum[i][j]);
		printf("\n");
	}
}