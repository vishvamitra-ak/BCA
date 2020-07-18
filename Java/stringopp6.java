//BCA V SEM JAVA LAB PROG - 6//
import java.io.*;
import java.lang.*;
public class stringopp6
{
    public static void main(String args[]) 
    {
        StringBuffer str=new StringBuffer("object language");
        System.out.println("Original string:"+str);
        String str1=new String(str.toString());
        int pos=str1. indexOf("Language");
        System.out.println("\n Indexof lanuage ="+pos);
	//str.insert(pos,"oriented");
        //System.out.println("Modified string :"+str);
        String str2=new String(str.toString());
        String ustr=str2.toUpperCase();
        System.out.println("Upper case string:"+ustr);
        String lstr=new String(str2.toLowerCase());
        System.out.println("\n Lower caseString:"+lstr);
        System.out.println("\n");
        System.out.println(ustr+"equals"+lstr+"="+ustr.equals(lstr));
        System.out.println("\n");
        System.out.println(ustr+"EqualsIngnoreCase"+lstr+"="+ustr.equalsIgnoreCase(lstr));
        str.append("Has high performance");
        System.out.println("\n After append:"+str);
        System.out.println("\nLength of string="+str.length());
        String nstr=new String("Java is");
        String constr=nstr.concat(str2);
        System.out.println("\n Final String ="+constr);
    }
}
