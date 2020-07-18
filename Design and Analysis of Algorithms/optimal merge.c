#include<stdio.h>
#include<conio.h>
void main()
{
    int i,k,a[10],c[10],n,l;
    printf("Enter no of elements\n");
    scanf("%d",&n);
    printf("Enter sorted array for optimal merge pattern");
    for(i=0;i<n;i++)
        scanf("%d",&a[i]);
    i=0;k=0;
    c[k]=a[i]+a[i+1];
    i=2;
    while(i<n)
    {
        k++;
        if(c[k-1]+a[i]<=(a[i]+a[i+1]))
            c[k]=c[k-1]+a[i];
        else
        {
            c[k]=a[i]+a[i+1];
            i=i+2;
            while(i<n)
            {
                k++;
                if((c[k-1]+a[i])<=(c[k-2]+a[i]))
                    c[k]=c[k-1]+a[i];
                else
                    c[k]=c[k-2]+a[i];
                i++;
            }
        }
        i++;
    }
    k++;
    c[k]=c[k-1]+c[k-2];
    printf("Optimal  sum are\n");
    for(k=0;k<n-1;k++)
        printf("%d ",c[k]);
    l=0;
    for(k=0;k<n-1;k++)
        l=l+c[k];
    printf("External path length= %d",l);
}
