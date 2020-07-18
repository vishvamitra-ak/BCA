#include<stdio.h>
#include<conio.h>
void main()
{
	int a[10][10],n,i,j,rsum,csum,spd=0,ssd=0;
	clrscr();
	printf("Enter the size:\n");
	scanf ("%d",&n);
	printf("Enter the matrix:\n");
	for(i=0;i<n;i++)
	{
		for(j=0;j<n;j++)
			scanf("%d",&a[i][j]);
	}
	printf("The matrix:\n");
	for(i=0;i<n;i++)
	{
		for(j=0;j<n;j++)
			printf("%d ",a[i][j]);
		printf("\n");
	}
	for(i=0;i<n;i++)
	{
		rsum=0;
		for(j=0;j<n;j++)
			rsum+=a[i][j];
		printf("%d row sum=%d\n",i+1,rsum);
	}
	for(i=0;i<n;i++)
	{
		csum=0;
		for(j=0;j<n;j++)
			csum+=a[j][i];
		printf("%d column sum=%d\n",i+1,csum);
	}

	for(i=0;i<n;i++)
	{
		spd+=a[i][i];
	}
	printf("Sum of primary diagonal elelments:%d\n",spd);
	ssd=0;
	for(i=0;i<n;i++)
	{
		for(j=n-i-1;j>=0;j--)
		{
			ssd+=a[i][j];
			break;
		}
	}
	printf("Sum of sec diag elelments:%d",ssd);
	getch();
}