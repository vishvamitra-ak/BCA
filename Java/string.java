import java.io.*;
import java.lang.*;
class stringop
{
	public static void main(String args[])
	{
		StringBuffer str=new StringBuffer("object language");
		System.out.println("Original String:"+str);
		String str1=new String(str.toString());
		int pos=str1.indexOf("language");
		System.out.println("\nindex of languages="+pos);
		str.insert(pos,"oriented");
		System.out.println("modified string:"+str);
		String str2=new String(str.toString());
		String ustr=str2.toUpperCase();
		System.out.println("Uppercase string:"+ustr);
		String lstr=str2.toLowerCase();
		System.out.println("Lowercase string:"+lstr);
		System.out.println(ustr+" equals "+lstr+" = "+ustr.equals(lstr));
		System.out.println(ustr+" equals "+lstr+" = "+ustr.equalsIgnoreCase(lstr));
		str.append(" Has high performance");
		System.out.println("After append:"+str);
		System.out.println("Length of string="+str.length());
		String nstr=new String("Java is");
		String constr=nstr.concat(str2);
		System.out.println("Final String:"+constr);
	}
}