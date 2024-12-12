#include <iostream>
using namespace std;

class patient{
    private:
        int appointmentID;
        string patientName;
        float doccharge;
        float hospitalcharge;
    public:
        void setpatientdetails(int pID, string pname);
        void displaypatientdetails();
        void setdoctorcharge(float pdoccharge);
        void sethospitalcharge(float phoscharge);
        float calculatetotalpayment();
};

void patient::setpatientdetails(int pID, string pname){
    appointmentID = pID;
    patientName = pname;
}
void patient::setdoctorcharge(float pdoccharge){
    doccharge = pdoccharge;
}

void patient::sethospitalcharge(float phoscharge){
    hospitalcharge = phoscharge;
    
}

float patient::calculatetotalpayment(){
    return doccharge+hospitalcharge;
}
void patient::displaypatientdetails(){
    cout<<"AppointmentID = " << appointmentID <<endl;
    cout<<"Patient Name = " <<patientName  <<endl;
    
}
int main(){
    patient p1,p2;
    p1.setpatientdetails(1001,"nimal");
    p1.setdoctorcharge(1500);
    p1.sethospitalcharge(500);

    p2.setpatientdetails(1002,"sunil");
    p2.setdoctorcharge(1700);
    p2.sethospitalcharge(500);

    p1.displaypatientdetails();
    cout<<"total payment = "<<p1.calculatetotalpayment()<<endl;

    p2.displaypatientdetails();
    cout<<"total payment = "<<p2.calculatetotalpayment()<<endl;

    return 0;
    
}