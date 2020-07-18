//Sum of rows and columns
#include<stdio.h>
#include<conio.h>
void main()
{
	clrscr();
	int a[10][10],m,n,i,j,s=0,sr[10],sc[10];

	printf("Enter m,n\n");
	scanf ("%d%d",&m,&n);
	printf("Enter %d*%d elements:\n",m,n);
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
			scanf("%d",&a[i][j]);
	}
	printf("matrix\n");
	for(i=0;i<m;i++)
	{
		s=0;
		for(j=0;j<n;j++)
		{
			s+=a[i][j];
		}
		sr[i]=s;
	}
	for(i=0;i<n;i++)
	{
		s=0;
		for(j=0;j<m;j++)
		{
			s+=a[i][j];
		}
		sc[i]=s;
	}
	printf("\n");
	for(i=0;i<m;i++)
	{
		for(j=0;j<n;j++)
			printf("%d  ",a[i][j]);
		printf(" %d",sr[i]);
		printf("\n");
	}
	printf("\n");
	for(i=0;i<m;i++)
		printf("%d  ",sc[i]);
	getch();
}
