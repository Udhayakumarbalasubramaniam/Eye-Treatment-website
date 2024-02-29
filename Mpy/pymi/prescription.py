# prescription page
def create_prescription(patient_name, medications):
    prescription_template = """
    <html>
    <head>
        <title>Prescription</title>
    </head>
    <body>
        <h1>Prescription for {patient}</h1>
        <h2>Medications:</h2>
        <ul>
        {med_list}
        </ul>
    </body>
    </html>
    """

    med_list_items = ""
    for medication in medications:
        med_list_items += "<li>{}</li>".format(medication)

    prescription_content = prescription_template.format(patient=patient_name, med_list=med_list_items)

    with open("prescription.html", "w") as file:
        file.write(prescription_content)

# Example usage:
patient_name = input("Enter the patient Name :\n")
medications = input("Please enter the prescribed medicine :\n")

create_prescription(patient_name, medications)