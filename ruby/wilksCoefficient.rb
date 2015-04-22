#!/usr/bin/env ruby

#Calculate Wilks for men using kilograms.
def wilksMensKG(bodyweight,total)
    wilks = total * 500 / (-216.0475144 + 16.2606339 * bodyweight - 0.002388645 * bodyweight**2 - 0.00113732 * bodyweight**3 + 0.00000701863 * bodyweight**4 - 0.00000001291 * bodyweight**5)
    puts wilks
end

#Calculate Wilks for men using pounds.
def wilksMensLB(bodyweight, total):
    bodyweightLBS = bodyweight*0.453592
    totalLBS = total*0.453592
    wilks = totalLBS * 500 / (-216.0475144 + 16.2606339 * bodyweightLBS - 0.002388645 * bodyweightLBS**2 - 0.00113732 * bodyweightLBS**3 + 0.00000701863 * bodyweightLBS**4 - 0.00000001291 * bodyweightLBS**5)
    puts wilks
end
    
#Calculate Wilks for women using kilograms.
def wilksWomensKG(bodyweight, total):
    wilks = total * 500 / (594.31747775582 - 27.23842536447 * bodyweight - 0.82112226871 * bodyweight**2 - 0.00930733913 * bodyweight**3 + 0.00004731582 * bodyweight**4 - 0.00000009054 * bodyweight**5)
    puts wilks
end
        
#Calculate Wilks for women using pounds.
def wilksWomensLB(bodyweight, total):
    bodyweightLBS = bodyweight*0.453592
    totalLBS = total*0.453592
    wilks = totalLBS * 500 / (594.31747775582 - 27.23842536447 * bodyweightLBS + 0.82112226871 * bodyweightLBS**2 - 0.00930733913 * bodyweightLBS**3 + 0.00004731582 * bodyweightLBS**4 - 0.00000009054 * bodyweightLBS**5)
    puts wilks
end
