public class Day
{

  final public static int NODAY = 0;
  final public static int MONDAY = 1;
  final public static int TUESDAY = 2;
  final public static int WEDNESDAY = 3;
  final public static int THURSDAY = 4;
  final public static int FRIDAY = 5;
  final public static int SATURDAY = 6;
  final public static int SUNDAY = 7;



  public static int getDay(String inputDay)
  { 
    switch(inputDay){
      case "Monday":
        return MONDAY;
        break;
      case "Tuesday":
        return TUESDAY;
        break;
      case "Wednesday":
        return WEDNESDAY;
        break;
      case "Thursday":
        return THURSDAY;
        break;
      case "Friday":
        return FRIDAY;
        break;
      case "Saturday":
        return SATURDAY;
        break;
      case "Sunday":
        return SUNDAY;
        break;

    }

     return 0;
    
  }

  public static void main(String args[])

  {
    System.out.println(getDay("Monday"));
  }
}
