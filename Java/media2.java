import java.io.*;
class media
{
	DataInputStream in=new DataInputStream(System.in);
	String title;
	int price;
	void read() throws IOException
	{
		
		System.out.println("Enter Title");
		title=in.readLine();
		System.out.println("Enter price");
		price=Integer.parseInt(in.readLine());
	}
	void disp()
	{
		System.out.println("title= "+title+" price= "+price); 
	}
}
class book extends media
{
	int no_of_pages;
	void read() throws IOException
	{
		super.read();
		
		
		System.out.println("Enter no. of pages");
		no_of_pages=Integer.parseInt(in.readLine());
	}
	void disp()
	{
		super.disp();
		System.out.println("No of pages= "+no_of_pages);
	}
}
class CD extends book
{
	int duration;
	void read() throws IOException
	{
		super.read();
		
		
		System.out.println("Enter Duration");
		duration=Integer.parseInt(in.readLine());
	}
	void disp()
	{
		super.disp();
		System.out.println("Duration= "+duration);
	}
}
class MediaMain2
{
	public static void main(String args[]) throws IOException
	{
		CD a=new CD();
		a.read();
		a.disp();
	}
}