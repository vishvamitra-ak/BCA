#include<stdio.h>
#include<conio.h>
int parent[10]={0},min,ne=1,mincost=0;
int cost[10][10]={0};
int i,j,a,b,v,u,n;
void main()
{
clrscr();
printf("Enter no of vertices\n");
scanf("%d",&n);
printf("Enter the weights in mat form\n");
for(i=1;i<=n;i++)
for(j=1;j<=n;j++)
{
scanf("%d",&cost[i][j]);
if(cost[i][j]==0)
cost[i][j]=999;
}
while(ne<n)
{
for(i=1,min=999;i<n;i++)
for(j=1;j<=n;j++)
if(cost[i][j]<min)
{
min=cost[i][j];
a=u=i,b=v=j;
}
while(parent[u])
u=parent[u];
while(parent[v])
v=parent[v];
if(u!=v)
{
printf("%d\tedge\t(%d,%d)=%d\n\n",ne++,a,b,min);
mincost+=min;
parent[v]=u;
}
cost[a][b]=cost[b][a]=999;
}
printf("minimum cost=%d\n",mincost);
getch();
}