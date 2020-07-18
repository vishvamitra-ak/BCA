#include<iostream.h>
#include<conio.h>
void main()
{
	clrscr();

	float r,a,c,pi=3.142;
	float area(float,float);
	float circum(float,float);
	cout<<"Enter radius= "<<endl;
	cin>>r;
	a=area(r,pi);
	c=circum(r,pi);
	cout<<"Area= "<<a<<" Circum= "<<c<<endl;
	getch();
}
inline float area (float r,float pi)
{
	return (pi*r*r);
}
inline float circum (float r,float pi)
{
	return (2*pi*r);
}