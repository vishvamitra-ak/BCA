#include<iostream.h>
#include<conio.h>
class static1
{
	int a;
	static int c;
public:
	disp(int);
	gc();
};
int static1::c;
static1::disp(int a1)
{
	a=a1;
	++c;
}
static1 gc()
{
	cout<<"Count= "<<c<<endl;
}
void main()
{
	clrscr();
	static1 s1,s2,s3;
	s1.gc();
	s2.gc();
	s3.gc();
	s1.disp(100);
	s2.disp(200);
	s3.disp(300);
	s1.gc();
	s2.gc();
	s3.gc();
	getch();
}
