//returning objects
#include<iostream.h>
#include<conio.h>
class complex
{
	int a,b;
public:
	in(int a1,int b1)
	{
		a=a1;b=b1;
	}
	friend complex abc (complex,complex);
	show(complex);
};
complex abc (complex c1,complex c2)
{
	complex c3;
	c3.a=c1.a+c2.a;
	c3.b=c1.b+c2.b;
	return (c3);
}
complex::show(complex z)
{
	cout<<"a= "<<z.a<<" b= "<<z.b<<endl;
}
main()
{
	clrscr();
	complex A,B,C;
	A.in(10,20);
	B.in(30,40);
	C=abc(A,B);
	A.show(A);
	B.show(B);
	C.show(C);
	getch();
}