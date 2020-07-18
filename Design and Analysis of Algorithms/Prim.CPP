#include<stdio.h>
#include<conio.h>
int a,b,v,u,i,j,n,ne=1;
int visited[10],min,mincost=0,cost[10][10];
void main()
{
	clrscr();
	printf("Enter no. of vertices\n");
	scanf ("%d",&n);
	printf("Enter the weights int mat form\n");
	for(i=1;i<=n;i++)
	for(j=1;j<=n;j++)
	{
		scanf("%d",&cost[i][j]);
		if(cost[i][j]==0)
		cost[i][j]=999;
	}
	for(i=2;i<=n;i++)
		visited[i]=0;
	printf("The edges of spanning tree are\n");
	visited[1]=1;
	while(ne<n)
	{
		for(i=1,min=999;i<=n;i++)
		for(j=1;j<=n;j++)
		if(cost[i][j]<min)
		if(visited[i]==0)
		continue;
		else
		{
            min=cost[i][j];
            a=u=i,b=v=j;
		}
		if(visited[u]==0||visited[v]==0)
		{
            printf("%d\tedge\t(%d,%d)=%d\n\n",ne++,a,b,min);
            mincost+=min;
            visited[b]=1;
		}
		cost[a][b]=cost[b][a]=999;
    }
    printf("Minimum cost=%d\n",mincost);
    getch();
}
