#include<stdio.h>
#include<conio.h>
int bgraph();
int c[10][10],bcost[10],d[10],p[10],k,n;
main()
{
	clrscr();
	int ch,mincost,i,j;
	printf("Enter no of vertices\n");
	scanf("%d",&n);
	printf("Enter no of stages\n");
	scanf("%d",&k);
	for(i=1;i<=n;i++)
	{
		for(j=1;j<=n;j++)
		{
			if(i==j)
				c[i][j]=999;
			else
			{
				printf("is there an edge b/w %d and %d\n",i,j);
				scanf("%d",&ch);
				if(ch)
				{
					printf("Enter cost\n");
					scanf("%d",&c[i][j]);
				}
				else
					c[i][j]=999;
			}
		}
	}
	mincost=bgraph();
	printf("Mincost from source to destination is %d \n",mincost);
	printf("Path from source to destination\n");
	for(i=1;i<=k;i++)
		printf("%d-->",p[i]);
	getch();
}
int bgraph()
{
	int d[10],r,j,min,v,a[10],i;
	bcost[n]=0;
	for(j=2;j<=n;j++)
	{
		min=999;
		for(v=n;v>=1;v--)
		{
			if((c[v][j]+bcost[v])<min)
			{
				min=c[v][j]+bcost[v];
				r=v;
			}
		}
		bcost[j]=c[r][j]+bcost[r];
		d[j]=r;
	}
	p[1]=1;
	p[k]=n;
	for(j=k-1;j>=2;j--)
		p[j]=d[p[j+1]];
	return (bcost[n]);
}