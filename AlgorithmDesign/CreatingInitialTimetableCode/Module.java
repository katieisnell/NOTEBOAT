public class Module
{
  final private String moduleCode;
  private int confidenceLevel;
  final int hwDueDate
  

  public Module(String inputModuleCode, int inputConfidenceLevel,
                String inputDueDate)
  {
    moduleCode = inputModuleCode;
    confidenceLevel = inputConfidenceLevel;
    hwDueDate = Day.getDay(inputDueDate); 
  }

  public void setConfidenceLevel(int inputConfidenceLevel)
  {
    confidenceLevel = inputConfidenceLevel;
  }

  public 







  public String getModuleCode()
  {
    return moduleCode;
  }

  public int getConfidenceLevel()
  {
    return confidenceLevel;
  }
}
