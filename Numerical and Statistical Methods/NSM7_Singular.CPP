//Singular
#include<stdio.h>
#include<conio.h>
void main()
{
	int i,j,k,m;
	float det,a[10][10];
	clrscr();
	printf("\nEnter elements:\n");
	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
			scanf("%f",&a[i][j]);
	}
	printf("\nMatrix\n");
	for(i=0;i<m;i++)
	{


		for(j=0;j<m;j++)
			printf("%.0f",a[i][j]);
		printf("\n");
	}
	det=(a[0][0]*a[1][1])-(a[0][1]*a[1][0]);
	printf("Determinant=%.0f\n",det);

	if(det==0)
		printf("Matrix is Singular\n");
	else
		printf("Matrix is not singular");
	getch();
}