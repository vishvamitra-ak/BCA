//Addition,sub,mult of matrices
#include<stdio.h>
//#include<conio.h>
int i,j,k;
void identity(int a[3][3]);
void add (int a[3][3],int b[3][3]);
void sub (int a[3][3],int b[3][3]);
void mul (int a[3][3],int b[3][3]);
main()
{
	//clrscr();
	int a[3][3],b[3][3];

	printf("Enter elements for matrix A:\n");
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
			scanf("%d",&a[i][j]);
	}
	printf("Enter elements for matrix B:\n");
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
			scanf("%d",&b[i][j]);
	}
	printf("Matrix A:\n");
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
			printf("%d\t",a[i][j]);
		printf("\n");
	}
	printf("Matrix B:\n");
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
			printf("%d\t",b[i][j]);
		printf("\n");
	}
	add(a,b);
	sub(a,b);
	mul(a,b);
	identity(a);
	//getch();
}
void add (int a[3][3],int b[3][3])
{
	int sum[3][3];
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
			sum[i][j]=a[i][j]+b[i][j];
	}
	printf("Addition:\n");
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
			printf("%d\t",sum[i][j]);
		printf("\n");
	}
}
void sub (int a[3][3],int b[3][3])
{
	int sum[3][3];
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
			sum[i][j]=a[i][j]-b[i][j];
	}
	printf("Substraction:\n");
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
			printf("%d\t",sum[i][j]);
		printf("\n");
	}
}
void mul (int a[3][3],int b[3][3])
{
	int sum[3][3];
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
		{
			sum[i][j]=0;
			for(int k=0;k<3;k++)
			{
				sum[i][j]=sum[i][j]+a[i][k]*b[k][j];
			}
		}
	}
	printf("Multiplication:\n");
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
			printf("%d\t",sum[i][j]);
		printf("\n");
	}
}
void identity(int a[3][3])
{
    int flag;
    for (i = 0; i < 3; i++)
    {
        for (j = 0; j < 3; j++)
        {
            if (a[i][j] != 1 && a[j][i] != 0)
            {
                flag = 0;
                break;
            }
        }
    }
    if (flag == 1 )
        printf("\nIt is identity matrix \n");
    else
        printf("\nIt is not a identity matrix \n");
}
