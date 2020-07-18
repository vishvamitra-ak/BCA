//interchange of diagonal elements
#include<stdio.h>
#include<conio.h>
void main()
{
	clrscr();
	int a[3][3],i,j,z;
	printf("Enter matrix\n");
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
		z=a[i][i];
		a[i][i]=a[i][3-i-1];
		a[i][3-i-1]=z;
	}
	printf("Interchanged matrix:\n");
	for(i=0;i<3;i++)
	{
		for(j=0;j<3;j++)
			printf("%d\t",a[i][j]);
		printf("\n");
	}
	getch();
}