package pertemuan4;

public class Calc {
    private String InputAnyone;

    public Calc(String calculation) {
        this.InputAnyone = calculation;
    }

    public float calculateResult() {
        String[] input_splitted = InputAnyone.split(" ");
        float temp_result = 0;
        String current_operator = "";
        float temp_number1 = 0, temp_number2 = 0;
        boolean number1_empty = true, number2_empty = true, operator_empty = true;
        for (String eachCharacter : input_splitted) {
            if (number1_empty) {
                temp_number1 = Integer.parseInt(eachCharacter);
                number1_empty = false;
            } else if (operator_empty) {
                current_operator = eachCharacter;
                operator_empty = false;
            } else if (number2_empty) {
                temp_number2 = Integer.parseInt(eachCharacter);
                number2_empty = false;
            }
            if (!number1_empty && !number2_empty && !operator_empty) {
                temp_result = calculateTwoNumbers(temp_number1, temp_number2, current_operator);
                temp_number1 = temp_result;
                number2_empty = true;
                operator_empty = true;
            }
        }
        return temp_result;
    }

    public float calculateTwoNumbers(float a, float b, String operator) {
        float result;
        switch (operator) {
            case "+":
                result = a + b;
                break;
            case "-":
                result = a - b;
                break;
            case "/":
                result = a / b;
                break;
            case "*":
                result = a * b;
                break;
            case "%":
                result = a % b;
                break;
            default:
                System.out.println("Operator Not Available");
                return 0;
        }
        System.out.println(a + " " + operator + " " + b + " = " + result);
        return result;
    }

    public String getInput() {
        return this.InputAnyone;
    }
}
