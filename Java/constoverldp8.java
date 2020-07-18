//BCA V SEM JAVA LAB PROG - 8//
class Box
{
   double width;
   double height;
   double depth;
   Box(double w, double h, double d)
   {
      width = w;
      height = h;
      depth = d;
   }
   Box()
   {
      width = -1;
      height = -1; 
      depth = -1; 
   }

// constructor used when cube is created
   Box(double len)
   {
      width = height = depth = len;
   }

   Box(Box b)
   {
      width =b.width;
      height =b.height;
      depth =b.depth;
   }

// compute and return volume
   double volume()
   {
      return width * height * depth;
   }
}
class constoverldp8
{
   public static void main(String args[])
   {
     // create boxes using the various constructors
        Box b1 = new Box(12.10,17.15,16.11);
        Box b2 = new Box();
        Box b3 = new Box(1.7);
        Box b4 = new Box(b1);
                     
        System.out.println("Volume of box1 is " +b1.volume());

        System.out.println("Volume of box2 is " +b2.volume());

        System.out.println("Volume of box3 is " +b3.volume());

        System.out.println("Volume of box4 is " +b4.volume());
   }
}

