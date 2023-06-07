#include "BluetoothSerial.h"
BluetoothSerial SerialBT;

int botao = 21;
int led = 22;
int contBotao = 0;
int valorBotao = 0;

void setup()
{
  SerialBT.begin("SECURE HER");
  pinMode(botao, INPUT_PULLUP);
  pinMode(led, OUTPUT);
  Serial.begin(115200);
}

void loop()  
{

  if (Serial.available()) {
    SerialBT.write(Serial.read());
  }
  if (SerialBT.available()) {
    Serial.write(SerialBT.read());
  }
  delay(20);
  
  valorBotao = digitalRead(botao);
  if(valorBotao == LOW){
    digitalWrite(led, HIGH);
    contBotao++;
    delay(300);
        if(contBotao == 3){
          SerialBT.println("O botão do pânico foi acionado");
          contBotao = 0;
          delay(3000);
        }
 
  } else {
    digitalWrite(led, LOW);
    }

    
}
