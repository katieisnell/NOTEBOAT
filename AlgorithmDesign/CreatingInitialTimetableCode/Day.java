public class Day
{

  final public static int NODAY = 0;
  final public static int MONDAY = 1;
  final public static int TUESDAY = 2;
  final public int WEDNESDAY = 3;
  final public int THURSDAY = 4;
  final public int FRIDAY = 5;
  final public int SATURDAY = 6;
  final public int SUNDAY = 7;

  public static int getDay(String inputDay)
  { 
    switch(inputDay){
      case "Monday":
        return MONDAY;
      case "Tuesday":
        return TUESDAY;
    }
    
  }

  public static void main(String args[])

  {
    System.out.println(getDay("Monday"));
  }
}
