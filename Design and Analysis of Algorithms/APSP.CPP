#include<stdio.h>
#include<conio.h>
int i,j,n,k,cost[10][10];
int apsp(int cost[10][10],int);
int min(int,int);
main()
{
//clrscr();
printf("enter no of vertices\n");
scanf("%d",&n);
printf("Enter cost\n");
for(i=1;i<=n;i++)
for(j=1;j<=n;j++)
{
scanf("%d",&cost[i][j]);
}
apsp(cost,n);
getch();
}
int apsp(int cost[10][10],int n)
{
int a[10][10];
for(i=1;i<=n;i++)
for(j=1;j<=n;j++)
a[i][j]=cost[i][j];
printf("Matrix rep of graph\n");
for(i=1;i<=n;i++)
{
for(j=1;j<=n;j++)
{
printf("%d ",a[i][j]);
}
printf("\n");
}
for(k=1;k<=n;k++)
for(i=1;i<=n;i++)
for(j=1;j<=n;j++)
    a[i][j]=min(a[i][j],a[i][k]+a[k][j]);
//if(a[i][j]>a[i][k]+a[k][j]);
//a[i][j]=a[i][k]+a[k][j];
printf("Matrix rep of graph after applying algo\n");
for(i=1;i<=n;i++)
{
for(j=1;j<=n;j++)
{
printf("%d ",a[i][j]);
}
printf("\n");
}
return 0;
}
min(int x,int y)
{
    if(x<y)
        return x;
    else
        return y;
}
