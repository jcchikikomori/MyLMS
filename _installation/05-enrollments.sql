/**
 * Author:  CORSANES
 * Created: 03 12, 16
 */

CREATE TABLE ENROLMENT
(
  student_id BIGINT(10) REFERENCES students(student_id),
  subject_id BIGINT(10) REFERENCES subjects(subject_id),
  mark INT(3),
  CHECK (mark BETWEEN 0 AND 100),
  CHECK (subject_id LIKE 'MCA___'),
  PRIMARY KEY(student_id, subject_id)
);

