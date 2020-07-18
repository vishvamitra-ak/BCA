import java.io.*;
import java.lang.*;
class dept
{
	double salary;
	dept()
	{
		try
		{
			DataInputStream in=new DataInputStream(System.in);
			System.out.println("Enter Salary for month");
			salary=Integer.parseInt(in.readLine());
			System.out.println("Entered salary:"+salary);
			salary*=12;
			System.out.println("Salary for year:"+salary);
		}
		catch(Exception e){}
	}
	void bonus()
	{
		double bon=salary*0.2;
		System.out.println("Bonux in superclass ="+bon);
	}
}
class subdept extends dept
{
	subdept()
	{
		super();
	}
	void bonus()
	{
		double bon=salary*0.15;
		System.out.println("Bonus in subclass:"+bon);
	}
}
class sal
{
	public static void main(String args[])
	{
		subdept ob=new subdept();
		ob.bonus();
	}
}