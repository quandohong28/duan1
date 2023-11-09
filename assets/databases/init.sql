-- database name: company
-- username: root
-- password: root
-- author: Do Hong Quan
-- date: 2023-11-09
-- version: 1.0.0
-- description: This file is used to initialize the database with fake data


CREATE DATABASE IF NOT EXISTS company;

USE company;

-- dang tao bang phong ban
CREATE TABLE IF NOT EXISTS departments (
    id INTEGER AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    manager_id INTEGER NULL default 0,
    description TEXT NOT NULL,
    PRIMARY KEY (id)
);

-- dang tao bang team
CREATE TABLE IF NOT EXISTS teams (
    id INTEGER AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    team_lead_id INTEGER NULL default 0,
    department_id INTEGER NOT NULL,
    description TEXT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (department_id) REFERENCES departments(id) ON DELETE CASCADE
);

-- dang tao bang cap bac
CREATE TABLE if not exists ranks (
    id INTEGER AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT NULL default NULL,
    PRIMARY KEY (id)
);

-- dang tao bang nhan vien
create TABLE IF NOT EXISTS employees (
    id INTEGER AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    birthdate DATE NOT NULL,
    location TEXT NOT NULL,
    start_date DATE NOT NULL,
    work_months INTEGER NOT NULL,
    bio TEXT NULL default NULL,
    job_title VARCHAR(255) NOT NULL,
    rank_id INTEGER NULL default 1,
    department_id INTEGER NULL,
    team_id INTEGER NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (rank_id) REFERENCES ranks(id) ON DELETE CASCADE,
    FOREIGN KEY (department_id) REFERENCES departments(id) ON DELETE CASCADE,
    FOREIGN KEY (team_id) REFERENCES teams(id) ON DELETE CASCADE
);


-- dang lien ket bang phong ban voi bang nhan vien
-- ALTER TABLE departments ADD FOREIGN KEY (manager_id) REFERENCES employees(id) ON DELETE CASCADE;

-- dang lien ket bang team voi bang nhan vien 
-- ALTER TABLE teams ADD FOREIGN KEY (team_lead_id) REFERENCES employees(id) ON DELETE CASCADE;

-- dang tao bang cham cong (thoi gian lam viec trong ngay)
CREATE TABLE IF NOT EXISTS attendance (
    id INTEGER AUTO_INCREMENT,
    employee_id INTEGER NOT NULL,
    date DATE NULL default CURRENT_DATE,
    start_time TIME NULL default CURRENT_TIMESTAMP,
    end_time TIME NULL default NULL,
    status VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (employee_id) REFERENCES employees(id) ON DELETE CASCADE
);

-- dang tao bang thoi gian lam viec trong thang
CREATE TABLE IF NOT EXISTS attendance_month (
    id INTEGER AUTO_INCREMENT,
    employee_id INTEGER NOT NULL,
    month INTEGER NOT NULL,
    year INTEGER NOT NULL,
    work_days INTEGER NOT NULL,
    work_hours INTEGER NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (employee_id) REFERENCES employees(id) ON DELETE CASCADE
);

-- dang tao bang he so luong
CREATE TABLE IF NOT EXISTS salary_scales (
    id INTEGER AUTO_INCREMENT,
    rank_id INTEGER NOT NULL,
    name VARCHAR(255) NOT NULL,
    value INTEGER NOT NULL,
    description TEXT NULL default NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (rank_id) REFERENCES ranks(id) ON DELETE CASCADE
);

-- dang tao bang luong
CREATE TABLE IF NOT EXISTS salaries (
    id INTEGER AUTO_INCREMENT,
    employee_id INTEGER NOT NULL,
    work_days REAL NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (employee_id) REFERENCES employees(id) ON DELETE CASCADE
);

-- dang tao bang luong chi tiet
CREATE TABLE IF NOT EXISTS salary_details (
    id INTEGER AUTO_INCREMENT,
    salary_id INTEGER NOT NULL,
    salary_scale_id INTEGER NOT NULL,
    salary INTEGER NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (salary_id) REFERENCES salaries(id) ON DELETE CASCADE,
    FOREIGN KEY (salary_scale_id) REFERENCES salary_scales(id) ON DELETE CASCADE
);

-- dang tao bang hop dong
CREATE TABLE IF NOT EXISTS contracts (
    id INTEGER AUTO_INCREMENT,
    employee_id INTEGER NOT NULL,
    contract_type VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (employee_id) REFERENCES employees(id) ON DELETE CASCADE
);



-- dang tao bang thong tin lien he
CREATE TABLE IF NOT EXISTS contact_infomation (
    id INTEGER AUTO_INCREMENT,
    employee_id INTEGER NOT NULL,
    phone_number VARCHAR(10) NOT NULL,
    email VARCHAR(255) NOT NULL,
    location TEXT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (employee_id) REFERENCES employees(id) ON DELETE CASCADE
);

-- dang tao bang lich su cong tac 
CREATE TABLE IF NOT EXISTS employee_history (
    id INTEGER AUTO_INCREMENT,
    employee_id INTEGER NOT NULL,
    department_id INTEGER NOT NULL,
    job_title VARCHAR(255) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (employee_id) REFERENCES employees(id) ON DELETE CASCADE,
    FOREIGN KEY (department_id) REFERENCES departments(id) ON DELETE CASCADE
);

-- dang tao bang dao tao
CREATE TABLE IF NOT EXISTS training (
    id INTEGER AUTO_INCREMENT,
    employee_id INTEGER NOT NULL,
    name VARCHAR(255) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    start_time TIME NOT NULL,
    end_time TIME NOT NULL,
    location TEXT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (employee_id) REFERENCES employees(id) ON DELETE CASCADE
);

-- dang tao bang nghi phep
CREATE TABLE IF NOT EXISTS leave_requests (
    id INTEGER AUTO_INCREMENT,
    employee_id INTEGER NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    reason TEXT NOT NULL,
    status VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (employee_id) REFERENCES employees(id) ON DELETE CASCADE
);


-- dang tao bang thong bao
create TABLE IF NOT EXISTS notifications (
    id INTEGER AUTO_INCREMENT,
    employee_id INTEGER NOT NULL,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    date DATE NOT NULL default CURRENT_DATE,
    time TIME NOT NULL default CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (employee_id) REFERENCES employees(id) ON DELETE CASCADE
);

-- dang tao bang danh gia nang luc nhan vien 
CREATE TABLE IF NOT EXISTS employee_reviews (
    id INTEGER AUTO_INCREMENT,
    employee_id INTEGER NOT NULL,
    reviewer_id INTEGER NOT NULL,
    review_date DATE NOT NULL,
    review TEXT NOT NULL,
    score INTEGER NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (employee_id) REFERENCES employees(id) ON DELETE CASCADE,
    FOREIGN KEY (reviewer_id) REFERENCES employees(id) ON DELETE CASCADE
);

-- dang tao bang danh gia nang luc phong ban
CREATE TABLE IF NOT EXISTS department_reviews (
    id INTEGER AUTO_INCREMENT,
    department_id INTEGER NOT NULL,
    reviewer_id INTEGER NOT NULL,
    review_date DATE NOT NULL,
    review TEXT NOT NULL,
    score INTEGER NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (department_id) REFERENCES departments(id) ON DELETE CASCADE,
    FOREIGN KEY (reviewer_id) REFERENCES employees(id) ON DELETE CASCADE
);

-- dang tao bang danh gia nang luc cong ty
CREATE TABLE IF NOT EXISTS company_reviews (
    id INTEGER AUTO_INCREMENT,
    reviewer_id INTEGER NOT NULL,
    review_date DATE NOT NULL,
    review TEXT NOT NULL,
    score INTEGER NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (reviewer_id) REFERENCES employees(id) ON DELETE CASCADE
);

-- dang tao bang thong tin dang nhap
CREATE TABLE IF NOT EXISTS login_infomation (
    id INTEGER AUTO_INCREMENT,
    employee_id INTEGER NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (employee_id) REFERENCES employees(id) ON DELETE CASCADE
);

-- dang nhap du lieu cho bang phong ban
INSERT INTO departments (name, description)
VALUES
('Kỹ thuật', 'Phòng ban Kỹ thuật chịu trách nhiệm phát triển và duy trì sản phẩm công nghệ của công ty. Các nhóm trong phòng ban này chuyên về việc phát triển phần mềm, nghiên cứu và phát triển sản phẩm, thiết kế sản phẩm, và quản lý dự án. Nhiệm vụ của phòng ban này là đảm bảo sản phẩm công nghệ của công ty luôn ổn định, cải tiến và đáp ứng nhu cầu của khách hàng.'),
('Kinh doanh', 'Phòng ban Kinh doanh chịu trách nhiệm phát triển chiến lược kinh doanh, tiếp thị sản phẩm và dịch vụ, quản lý quan hệ khách hàng, và đảm bảo công ty đạt được lợi nhuận và tăng trưởng. Nhiệm vụ của họ là tạo cơ hội kinh doanh, tìm kiếm khách hàng mới, và duy trì mối quan hệ với khách hàng hiện tại.'),
('Tài chính', 'Phòng ban Tài chính quản lý tài chính và nguồn vốn của công ty. Họ thực hiện kế toán, quản lý nguồn vốn, thu thuế, và quản lý ngân sách. Nhiệm vụ chính là đảm bảo công ty duy trì tình hình tài chính ổn định và tăng trưởng bền vững.'),
('Quản lý sản phẩm', 'Phòng ban Quản lý sản phẩm có nhiệm vụ định hình và quản lý sản phẩm hoặc dịch vụ của công ty để đáp ứng nhu cầu của khách hàng và chiến lược kinh doanh. Họ thường là cầu nối giữa phòng Kỹ thuật và Kinh doanh.'),
('Hỗ trợ khách hàng', 'Phòng ban Hỗ trợ khách hàng chịu trách nhiệm cung cấp dịch vụ hỗ trợ và giải quyết vấn đề cho khách hàng. Họ đảm bảo khách hàng nhận được sự hỗ trợ và giúp đỡ khi cần.'),
('Tài nguyên nhân sự', 'Phòng ban Tài nguyên nhân sự quản lý các vấn đề liên quan đến nhân viên, bao gồm tuyển dụng, đào tạo, quản lý mối quan hệ lao động, và chế độ phúc lợi.'),
('Luật pháp và Bảo mật', 'Phòng ban Luật pháp và Bảo mật đảm bảo công ty tuân thủ tất cả các quy định pháp lý và bảo vệ thông tin quan trọng của công ty.'),
('Quản lý dự án', 'Phòng ban Quản lý dự án quản lý việc thực hiện và tiến độ các dự án cụ thể trong công ty, đảm bảo chúng được triển khai một cách hiệu quả và đúng hẹn.');

-- dang nhap du lieu cho bang team
INSERT INTO teams (name, department_id, description)
VALUES
('Phát triển phần mêm', 1, 'Chịu trách nhiệm xây dựng, phát triển và duy trì phần mềm hoặc sản phẩm công nghệ của công ty. Các chức danh bao gồm lập trình viên, kỹ sư phần mềm, kiến trúc sư phần mềm, và tester.'),
('Nghiên cứu và phát triển sản phẩm', 1, 'Tập trung vào nghiên cứu, phát triển sản phẩm mới và cải tiến sản phẩm hiện có. Đây có thể là các nhà nghiên cứu, nhà khoa học dữ liệu, và kiến trúc sư sản phẩm.'),
('Thiết kế sản phẩm', 1, 'Tạo ra giao diện người dùng và trải nghiệm người dùng (UI/UX) hấp dẫn cho sản phẩm. Đây bao gồm các nhà thiết kế đồ họa và thiết kế trải nghiệm người dùng.'),
('Quản lý dự án', 1, 'Giám sát tiến độ, quy trình, và nguồn lực của dự án, đảm bảo các dự án được triển khai một cách hiệu quả và đúng hẹn.'),

('Phát triển kế hoạch kinh doanh', 2, 'Đảm bảo công ty có một chiến lược kinh doanh chi tiết, bao gồm phân đoạn thị trường, phân phối sản phẩm, và lợi nhuận dự kiến.'),
('Tiếp thị và quảng cáo', 2, 'Xây dựng chiến dịch tiếp thị để thu hút khách hàng và quảng bá thương hiệu. Đây bao gồm quảng cáo trực tuyến, truyền hình, in ấn, và nhiều chiến dịch khác.'),
('Phân phối và phát triển thị trường', 2, 'Đảm bảo sản phẩm của công ty được đưa ra thị trường và phân phối một cách hiệu quả và nghiên cứu và phát triển thị trường mới.'),
('Phân tích thị trường', 2, 'Theo dõi và đánh giá thị trường, cạnh tranh, và kết quả của chiến dịch tiếp thị để đưa ra quyết định chiến lược.'),

('Kế toán và tài chính', 3, 'Quản lý tài chính của công ty, bao gồm kế toán, quản lý ngân sách, và báo cáo tài chính.'),
('Quản lý nguồn vốn', 3, 'Quản lý việc huy động và quản lý nguồn vốn cho công ty, bao gồm việc tìm kiếm nhà đầu tư và quản lý vốn.'),
('Thu thuế', 3, 'Đảm bảo công ty tuân thủ tất cả các quy định về thuế và thực hiện các khoản thanh toán thuế đúng hạn.'),

('Chi phối sự phát triển và quản lý sản phẩm', 4, 'Đảm bảo sản phẩm hoặc dịch vụ của công ty đáp ứng nhu cầu của khách hàng và phù hợp với chiến lược kinh doanh.'),

('Hỗ trợ và dịch vụ khách hàng', 5, 'Giải quyết câu hỏi, vấn đề và yêu cầu từ khách hàng, đảm bảo họ nhận được hỗ trợ chất lượng.'),

('Tuyển dụng và phát triển nhân sự', 6, 'Tuyển dụng và đào tạo nhân viên mới, quản lý chương trình phát triển nhân viên, và duy trì hồ sơ nhân viên.'),
('Quản lý mối quan hệ lao động', 6, 'Giải quyết các vấn đề liên quan đến mối quan hệ lao động và thúc đẩy sự hài lòng và hiệu suất của nhân viên.'),
('Quản lý lương và phúc lợi', 6, 'Quản lý quá trình trả lương, phúc lợi và chế độ bảo hiểm cho nhân viên.'),

('Quản lý vấn đề pháp lý', 7, 'Đảm bảo công ty tuân thủ tất cả các quy định pháp lý và hợp đồng.'),
('Bảo mật thông tin và quản lý rủi ro', 7, 'Đảm bảo an toàn thông tin và dữ liệu của công ty, đồng thời đối phó với các rủi ro bảo mật.'),

('Quản lý các dự án cụ thể', 8, 'Quản lý việc thực hiện và tiến độ các dự án cụ thể trong công ty, đảm bảo chúng được triển khai một cách hiệu quả và đúng hẹn.');

-- dang nhap du lieu cho bang cap bac
INSERT INTO ranks (name, description)
VALUES
('staff', 'Nhân viên'),
('team_lead', 'Trưởng nhóm'),
('manager', 'Quản lý'),
('director', 'Giám đốc');

-- dang nhap du lieu cho bang he so luong =
INSERT INTO salary_scales (rank_id, name, value, description)
VALUES
(1, 'Lương cơ bản', 10000000, 'Lương cơ bản của nhân viên, tính bằng Việt Nam Đồng'),
(1, 'Nhà ở', 1000000, 'Phụ cấp nhà ở của nhân viên, tính bằng Việt Nam Đồng'),
(1, 'Xăng xe', 500000, 'Phụ cấp xăng xe của nhân viên, tính bằng Việt Nam Đồng'),
(1, 'Bảo hiểm', 10, 'Bảo hiểm của nhân viên, trừ vào lương cơ bản, tính theo phần trăm lương cơ bản'),
(1, 'Thưởng', 5, 'Thưởng của nhân viên, tính theo phần trăm lương cơ bản'),
(1, 'Thâm niên', 2, 'Thâm niên của nhân viên, tính theo phần trăm lương cơ bản'),

(2, 'Lương cơ bản', 15000000, 'Lương cơ bản của nhân viên, tính bằng Việt Nam Đồng'),
(2, 'Nhà ở', 1500000, 'Phụ cấp nhà ở của nhân viên, tính bằng Việt Nam Đồng'),
(2, 'Xăng xe', 700000, 'Phụ cấp xăng xe của nhân viên, tính bằng Việt Nam Đồng'),
(2, 'Bảo hiểm', 12, 'Bảo hiểm của nhân viên, trừ vào lương cơ bản, tính theo phần trăm lương cơ bản'),
(2, 'Thưởng', 10, 'Thưởng của nhân viên, tính theo phần trăm lương cơ bản'),
(2, 'Thâm niên', 5, 'Thâm niên của nhân viên, tính theo phần trăm lương cơ bản'),

(3, 'Lương cơ bản', 20000000, 'Lương cơ bản của nhân viên, tính bằng Việt Nam Đồng'),
(3, 'Nhà ở', 2000000, 'Phụ cấp nhà ở của nhân viên, tính bằng Việt Nam Đồng'),
(3, 'Xăng xe', 1000000, 'Phụ cấp xăng xe của nhân viên, tính bằng Việt Nam Đồng'),
(3, 'Bảo hiểm', 15, 'Bảo hiểm của nhân viên, trừ vào lương cơ bản, tính theo phần trăm lương cơ bản'),
(3, 'Thưởng', 12, 'Thưởng của nhân viên, tính theo phần trăm lương cơ bản'),
(3, 'Thâm niên', 8, 'Thâm niên của nhân viên, tính theo phần trăm lương cơ bản'),

(4, 'Lương cơ bản', 50000000, 'Lương cơ bản của nhân viên, tính bằng Việt Nam Đồng'),
(4, 'Nhà ở', 5000000, 'Phụ cấp nhà ở của nhân viên, tính bằng Việt Nam Đồng'),
(4, 'Xăng xe', 2500000, 'Phụ cấp xăng xe của nhân viên, tính bằng Việt Nam Đồng'),
(4, 'Bảo hiểm', 20, 'Bảo hiểm của nhân viên, trừ vào lương cơ bản, tính theo phần trăm lương cơ bản'),
(4, 'Thưởng', 15, 'Thưởng của nhân viên, tính theo phần trăm lương cơ bản'),
(4, 'Thâm niên', 10, 'Thâm niên của nhân viên, tính theo phần trăm lương cơ bản');


-- dang nhap du lieu cho bang nhan vien
INSERT INTO employees (name, birthdate, location, start_date, bio, job_title, rank_id, department_id, team_id)
WITH RECURSIVE fake_data AS (
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM fake_data WHERE n < 100
)
SELECT
  CONCAT('Employee ', n) AS name,
  DATE_ADD('1980-01-01', INTERVAL FLOOR(RAND() * 40) YEAR) AS birthdate,
  CONCAT('Location ', FLOOR(RAND() * 5) + 1) AS location,
  DATE_ADD('2010-01-01', INTERVAL FLOOR(RAND() * 10) YEAR) AS start_date,
  'A brief bio of the employee' AS bio,
  CASE
    WHEN RAND() < 0.4 THEN 'Manager'
    WHEN RAND() < 0.7 THEN 'Engineer'
    WHEN RAND() < 0.9 THEN 'Designer'
    ELSE 'Analyst'
  END AS job_title,
  FLOOR(1 + (RAND() * 4)) AS rank_id,
FLOOR(1 + (RAND() * 8)) AS department_id,
  1 AS team_id
FROM fake_data;

-- dang nhap du lieu cho bang cham cong
INSERT INTO attendance (employee_id, date, start_time, end_time, status)
WITH RECURSIVE fake_data AS (
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM fake_data WHERE n < 100
)
SELECT
  n,
  '2023-11-09' AS date,
  CONCAT(LPAD(FLOOR(RAND() * 24), 2, '0'), ':', LPAD(FLOOR(RAND() * 60), 2, '0'), ':00') AS start_time,
  CONCAT(LPAD(FLOOR(RAND() * 24), 2, '0'), ':', LPAD(FLOOR(RAND() * 60), 2, '0'), ':00') AS end_time,
  CASE
    WHEN RAND() < 0.8 THEN 'Present'
    WHEN RAND() < 0.95 THEN 'Late'
    WHEN RAND() < 0.95 THEN 'Approved'
    ELSE 'Not Approved'
  END AS status
FROM fake_data;


-- dang nhap du lieu cho bang luong
INSERT INTO salaries (employee_id, work_days)
WITH RECURSIVE fake_data AS (
  
 
SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM fake_data WHERE n < 100
)
SELECT
  FLOOR(1 + (RAND() * 99)) AS employee_id,
  FLOOR(1 + (RAND() * 25)) AS work_days
FROM fake_data;

-- dang nhap du lieu cho bang luong chi tiet
INSERT INTO salary_details (salary_id, salary_scale_id, salary)
WITH RECURSIVE fake_data AS (
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM fake_data WHERE n < 100
)
SELECT
  n,
  FLOOR(1 + (RAND() * 24)) AS salary_scale_id,
  FLOOR(1000000 + (RAND() * 10000000)) AS salary
FROM fake_data;


-- dang nhap du lieu cho bang hop dong
INSERT INTO contracts (employee_id, contract_type, content, start_date, end_date)
WITH RECURSIVE fake_data AS (
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM fake_data WHERE n < 100
)
SELECT
  n,
  CASE
    WHEN RAND() < 0.5 THEN 'Full-time'
    WHEN RAND() < 0.8 THEN 'Part-time'
    ELSE 'Intern'
  END AS contract_type,
  'Contract content' AS content,
  DATE_ADD('2010-01-01', INTERVAL FLOOR(RAND() * 10) YEAR) AS start_date,
  DATE_ADD('2010-01-01', INTERVAL FLOOR(RAND() * 10) YEAR) AS end_date
FROM fake_data;

-- dang nhap du lieu cho bang thong tin lien he
INSERT INTO contact_infomation (employee_id, phone_number, email, location)
WITH RECURSIVE fake_data AS (
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM fake_data WHERE n < 100
)
SELECT
  n,
  CONCAT('0', FLOOR(RAND() * 1000000000)) AS phone_number,
  CONCAT('employee', n, '@company.com') AS email,
  CONCAT('Location ', FLOOR(RAND() * 5) + 1) AS location
FROM fake_data;

-- dang nhap du lieu cho bang lich su cong tac
INSERT INTO employee_history (employee_id, department_id, job_title, start_date, end_date)
WITH RECURSIVE fake_data AS (
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM fake_data WHERE n < 100
)
SELECT
  n,
  FLOOR(1 + (RAND() * 8)) AS department_id,
  CASE
    WHEN RAND() < 0.4 THEN 'Manager'
    WHEN RAND() < 0.7 THEN 'Engineer'
    WHEN RAND() < 0.9 THEN 'Designer'
    ELSE 'Analyst'
  END AS job_title,
  DATE_ADD('2010-01-01', INTERVAL FLOOR(RAND() * 10) YEAR) AS start_date,
  DATE_ADD('2010-01-01', INTERVAL FLOOR(RAND() * 10) YEAR) AS end_date
FROM fake_data;

-- dang nhap du lieu cho bang dao tao
INSERT INTO training (employee_id, name, start_date, end_date, start_time, end_time, location)
WITH RECURSIVE fake_data AS (
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM fake_data WHERE n < 100
)
SELECT
  n,
  CONCAT('Training ', n) AS name,
  DATE_ADD('2010-01-01', INTERVAL FLOOR(RAND() * 10) YEAR) AS start_date,
  DATE_ADD('2010-01-01', INTERVAL FLOOR(RAND() * 10) YEAR) AS end_date,
  CONCAT(LPAD(FLOOR(RAND() * 24), 2, '0'), ':', LPAD(FLOOR(RAND() * 60), 2, '0'), ':00') AS start_time,
  CONCAT(LPAD(FLOOR(RAND() * 24), 2, '0'), ':', LPAD(FLOOR(RAND() * 60), 2, '0'), ':00') AS end_time,
  CONCAT('Location ', FLOOR(RAND() * 5) + 1) AS location
FROM fake_data;

-- dang nhap du lieu cho bang nghi phep
INSERT INTO leave_requests (employee_id, start_date, end_date, reason, status)
WITH RECURSIVE fake_data AS (
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM fake_data WHERE n < 1000
)
SELECT
  FLOOR(1 + (RAND() * 99)) AS employee_id,
  DATE_ADD('2010-01-01', INTERVAL FLOOR(RAND() * 10) YEAR) AS start_date,
  DATE_ADD('2010-01-01', INTERVAL FLOOR(RAND() * 10) YEAR) AS end_date,
  'Leave request reason' AS reason,
  CASE
    WHEN RAND() < 0.8 THEN 'Approved'
    WHEN RAND() < 0.95 THEN 'Rejected'
    ELSE 'Pending'
  END AS status
FROM fake_data;

-- dang nhap du lieu cho bang thong bao
INSERT INTO notifications (employee_id, title, content, date, time)
WITH RECURSIVE fake_data AS (
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM fake_data WHERE n < 1000
)
SELECT
  FLOOR(1 + (RAND() * 99)) AS employee_id,
  CONCAT('Notification ', n) AS title,
  'Notification content' AS content,
  '2023-11-09' AS date,
  CONCAT(LPAD(FLOOR(RAND() * 24), 2, '0'), ':', LPAD(FLOOR(RAND() * 60), 2, '0'), ':00') AS time
FROM fake_data;

-- dang nhap du lieu cho bang danh gia nang luc nhan vien
INSERT INTO employee_reviews (employee_id, reviewer_id, review_date, review, score)
WITH RECURSIVE fake_data AS (
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM fake_data WHERE n < 1000
)
SELECT
  FLOOR(1 + (RAND() * 99)) AS employee_id,
  FLOOR(1 + (RAND() * 99)) AS reviewer_id,
  '2023-11-09' AS review_date,
  'Employee review' AS review,
  FLOOR(1 + (RAND() * 5)) AS score
FROM fake_data;

-- dang nhap du lieu cho bang danh gia nang luc phong ban
INSERT INTO department_reviews (department_id, reviewer_id, review_date, review, score)
WITH RECURSIVE fake_data AS (
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM fake_data WHERE n < 1000
)
SELECT
  FLOOR(1 + (RAND() * 8)) AS department_id,
  FLOOR(1 + (RAND() * 99)) AS reviewer_id,
  '2023-11-09' AS review_date,
  'Department review' AS review,
  FLOOR(1 + (RAND() * 5)) AS score
FROM fake_data;

-- dang nhap du lieu cho bang danh gia nang luc cong ty
INSERT INTO company_reviews (reviewer_id, review_date, review, score)
WITH RECURSIVE fake_data AS (
  SELECT 1 AS n
  UNION ALL
  SELECT n + 1 FROM fake_data WHERE n < 1000
)
SELECT
  FLOOR(1 + (RAND() * 99)) AS reviewer_id,
  '2023-11-09' AS review_date,
  'Company review' AS review,
  FLOOR(1 + (RAND() * 5)) AS score
FROM fake_data;

-- dang nhap du lieu cho bang thong tin dang nhap
INSERT INTO login_infomation (employee_id, username, password)
VALUES
    (1, 'user1', 'password1'),
    (2, 'user2', 'password2'),
    (3, 'user3', 'password3'),
    (4, 'user4', 'password4'),
    (5, 'user5', 'password5'),
    (6, 'user6', 'password6'),
    (7, 'user7', 'password7'),
    (8, 'user8', 'password8'),
    (9, 'user9', 'password9');

-- dang nhap du lieu cho bang thoi gian lam viec trong thang
INSERT INTO attendance_month (employee_id, month, year, work_days, work_hours)
SELECT
    FLOOR(1 + (RAND() * 100)) AS employee_id,
    FLOOR(1 + (RAND() * 12)) AS month,
    2023 AS year,
    FLOOR(1 + (RAND() * 30)) AS work_days,
    FLOOR(100 + (RAND() * 100)) AS work_hours
FROM (
    SELECT 1 UNION ALL
    SELECT 2 UNION ALL
    SELECT 3 UNION ALL
    SELECT 4 UNION ALL
    SELECT 5 UNION ALL
    SELECT 6 UNION ALL
    SELECT 7 UNION ALL
    SELECT 8 UNION ALL
    SELECT 9 UNION ALL
    SELECT 10 UNION ALL
    SELECT 11 UNION ALL
    SELECT 12 UNION ALL
    SELECT 13 UNION ALL
    SELECT 14 UNION ALL
    SELECT 15 UNION ALL
    SELECT 16 UNION ALL
    
   
SELECT 17 UNION ALL
    SELECT 18 UNION ALL
    SELECT 19 UNION ALL
    SELECT 20 UNION ALL
    SELECT 21 UNION ALL
    SELECT 22 UNION ALL
    
   
SELECT 23 UNION ALL
    SELECT 24 UNION ALL
    SELECT 25 UNION ALL
    SELECT 26 UNION ALL
    SELECT 27 UNION ALL
    SELECT 28 UNION ALL
    SELECT 29 UNION ALL
    SELECT 30
) AS numbers
LIMIT 100;