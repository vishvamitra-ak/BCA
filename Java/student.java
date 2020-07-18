import java.io.*;
class student
{
	DataInputStream in=new DataInputStream(System.in);
	int rno;
	String name;
	void read()
	{
		try
		{
			System.out.println("Enter Roll no");
			rno=Integer.parseInt(in.readLine());
			System.out.println("Enter Name");
			name=in.readLine();
		}
		catch(Exception e)
		{
			System.out.println(e);
		}
	}
	void disp()
	{
		System.out.println("Roll no= "+rno);
		System.out.println("Name= "+name);
	}
}
class marks extends student
{
	int m1,m2,total;
	void read()
	{
		super.read();
		try
		{
			System.out.println("Enter marks m1 and m2");
			m1=Integer.parseInt(in.readLine());
			m2=Integer.parseInt(in.readLine());
			total=m1+m2;
		}
		catch(Exception e)
		{
			System.out.println(e);
		}
	}
	void disp()
	{
		super.disp();
		System.out.println("Marks = "+m1+" "+m2+"\n Total= "+total);
	}
}
class StudMain
{
	public static void main(String args[])
	{
		marks a=new marks();
		a.read();
		a.disp();
	}
}