
CREATE TABLE FAQQ(
  id INT NOT NULL AUTO_INCREMENT,
  question TEXT NOT NULL,
  answer TEXT NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO FAQQ (question, answer)
VALUES
  ('What does organic mean?', 'Organic refers to the way agricultural products are grown and processed. Organic farming practices are designed to promote soil and water conservation and reduce pollution.'),
  ('Are your products locally sourced?', 'Yes, we source our products from local farmers and producers whenever possible.'),
  ('Do you offer home delivery?', 'Yes, we offer home delivery for a small fee. Please see our delivery page for more information.'),
  ('What is your return policy?', 'We offer a 30-day return policy for unused and unopened products. Please see our returns page for more information.');
