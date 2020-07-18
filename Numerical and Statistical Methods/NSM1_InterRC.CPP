//Interchange row and column
#include<stdio.h>
#include<conio.h>
void main()
{       clrscr();
	int a[3][3],b[3][3],i,j;

	printf("Enter matrix elements:\n");
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
			scanf("%d",&a[i][j]);
	}
	printf("Matrix:\n");
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
			printf("%d\t",a[i][j]);
		printf("\n");
	}
	for(i=0;i<3;i++)
	{
		for( j=0;j<3;j++)
			b[i][j]=a[j][i];
	}
	printf("Interchanged matrix:\n");
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
			printf("%d\t",b[i][j]);
		printf("\n");
	}
	getch();
}

