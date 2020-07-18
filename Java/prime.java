import java.io.*;
class prime
{
    public static void main(String args[])
    {
        int i,j,n;
        try
        {
            System.out.println("N= "+args[0]);
            n=Integer.parseInt(args[0]);
            System.out.println("Prime Series of "+n+" is");
            for(j=2;j<=n;j++)
            {
                int flag=0;
                for(i=2;i<=j/2;i++)
                {
                    if(j%i==0)
                        flag=1;
                }
                if(flag==0)
                    System.out.println(j);
            }
        }
        catch(Exception e)
        {
            System.out.println(e);
        }
    }
}
