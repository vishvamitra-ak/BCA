//Mult of matrices
#include<stdio.h>
#include<conio.h>
int i,j,k,m,n;
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
	mul(a,b,m,n);
	getch();
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