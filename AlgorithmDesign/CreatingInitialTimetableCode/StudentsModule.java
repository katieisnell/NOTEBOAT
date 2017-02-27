public class StudentsModule
{
  private final String moduleCode;
  private int confidenceLevel;
  private int hwDueDay;
  //per week
  private final int recomendedHours;
  private int hoursToPutIn;



  public Module(String inputModuleCode, int inputConfidenceLevel,
                String inputDueDay, int inputRecomendedHours)
  {
    moduleCode = inputModuleCode;
    confidenceLevel = inputConfidenceLevel;
    hwDueDay = Day.getDay(inputDueDay);
    recommendedHours = inputRecomendedHours;
    hoursToPutIn = calculateHourPerWeek();

  }

  private int calculateHourPerWeek()
  {

    // each module has recommended hours to do per week
    // each module has confidence level which student chooses (10 for struggle, 1 for doing great)
    // will scale to their confidence level

    int scalingFactor = 1;

    // amount of hours should be doing in each module
    int hours = 0;


    switch (confidenceLevel)
    {
      // So not struggling with module
      case 1 :
        scalingFactor = 0.75;
        break;
      case 2 :
        scalingFactor = 1;
        break;
      case (3 || 4) :
        scalingFactor = 1.25;
        break;
      case (5 || 6) :
        scalingFactor = 1.5;
        break;
      case (7 || 8) :
        scalingFactor = 1.75;
        break;
      // If they're struggling a lot with a muggle
      case (9 || 10)
        scalingFactor = 2;
        break;
    }

    hoursToPutIn = scalingFactor * recommendedHours;

    return actualStudyHoursPerWeek;
  }

  public void scaleHoursDown(int newScaleFactor)
  {
    // hoursToPutIn = hoursToPutIn * newScaleFactor
    hoursToPutIn *= newScaleFactor;
  }



  public void setConfidenceLevel(int inputConfidenceLevel)
  {
    confidenceLevel = inputConfidenceLevel;
  }

  public void setHwDueDay(int inputDueDay)
  {
    hwDueDay = getDay(inputDueDay);
  }

  public String getModuleCode()
  {
    return moduleCode;
  }

  public int getConfidenceLevel()
  {
    return confidenceLevel;
  }

  public int getHoursToPutIn()
  {
    return hoursToPutIn;
  }
}
