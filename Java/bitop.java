import java.io.*;
class bitop
{
	public static void main(String args[])
	{
		DataInputStream in=new DataInputStream(System.in);
		try
		{
			System.out.println("Enter a,b");
			int a=Integer.parseInt(in.readLine());
			int b=Integer.parseInt(in.readLine());
			
			System.out.println(a+b);
			int c;
			c=a&b;
			System.out.println(c);
			c=a|b;
			System.out.println(c);
			c=a^b;
			System.out.println(c);
			c=~b;
			System.out.println(c);
			c=a<<b;
			System.out.println(c);
			c=a>>b;
			System.out.println(c);
			c=a>>>b;
			System.out.println(c);
		}
		catch(Exception e)
		{
			System.out.println(e);
		}
	}
}