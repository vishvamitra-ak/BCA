#include<stdio.h>
#include<conio.h>
int c[10][10],p[10],w[10],x[10],m,n,i;
int max(int,int);
void ptable();
void knapsack();
main()
{
    printf("Enter size of knapsack ");
    scanf("%d",&m);
    printf("Enter n ");
    scanf("%d",&n);
    printf("Enter profits\n");
    for(i=1;i<=n;i++)
        scanf("%d",&p[i]);
    printf("Enter weights\n");
    for(i=1;i<=n;i++)
        scanf("%d",&w[i]);
    ptable();
    knapsack();
}
int max(int c,int d)
{
    if(c>=d)
        return c;
    else
        return d;
}
void ptable()
{
    int i,j;
    for(i=0;i<=n;i++)
    {
        for(j=0;j<=m;j++)
        {
            if(i==0 || j==0)
                c[i][j]=0;
            else if(w[i]>j)
                c[i][j]=c[i-1][j];
            else if(w[i]<=j)
                c[i][j]=max(c[i-1][j],c[i-1][j-w[i]]+p[i]);
        }
    }
}
void knapsack()
{
    int i=n,j=m;
    while(i!=0)
    {
        if(c[i][j]!=c[i-1][j])
        {
            x[i]=1;
            j=j-w[i];
        }
        i--;
    }
    printf("\nTable\n");
    for(i=0;i<=n;i++)
    {
        for(j=0;j<=n;j++)
            printf("%d\t",c[i][j]);
        printf("\n");
    }
    printf("Profit is %d \n",c[i-1][j-1]);
    for(i=0;i<=n;i++)
        printf("%d\t",i);
    printf("\n");
    for(i=0;i<=n;i++)
        printf("%d\t",x[i]);

}
