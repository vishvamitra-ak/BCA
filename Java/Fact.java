public class Fact
{
    public static void main(String[] args)
    {
        try
        {
            int i,j,n=args.length,fact;
            for(i=0;i<n;i++)
            {
                int f=Integer.parseInt(args[i]);
                fact=1;
                for(j=2;j<=f;j++)
                    fact*=j;
                System.out.println(args[i]+"="+fact);
            }
        }
        catch(Exception e) {
            System.out.println(e);
        }
    }
}
