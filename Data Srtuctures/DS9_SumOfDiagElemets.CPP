//Sum of diagonal elements
#include<stdio.h>
#include<conio.h>
void main()
{
	clrscr();
	int a[10][10],i,j,m,n,s=0;

	printf("Enter m,n\n");
	scanf ("%d%d",&m,&n);
	printf("Enter %d*%d elements:\n",m,n);
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
			scanf("%d",&a[i][j]);
	}
	for(i=0;i<m;i++)
	{
		s+=a[i][i];
	}
	printf("Matrix:\n");
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
			printf("%d ",a[i][j]);
		printf("\n");
	}
	printf("Sum of diagonal elements:%d",s);
	getch();
}