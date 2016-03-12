/**
 * Author:  CORSANES
 * Created: 03 12, 16
 */

CREATE TABLE subjects
(
  subject_id BIGINT(10) PRIMARY KEY,
  subject_name varchar(20),
  department varchar(20),
  CHECK (department IN('MATHS','COMPUTER SCIENCE')),
  CHECK (subject_id LIKE 'MCA___')
);

